Tabel Emitem(
	Kode;
	Nama Emitem;
	Sektor;
)


// Kapitalisasi Pasar adalah Nilai dari jumlah saham beredar
dikali dengan harga saham;

Table Neraca(
	Pk Neraca;
	FK Kode;
	Aset int ;
	Liabilitas int;
	Modal/Ekuitas;
	Satuan; Enum (Penuh, Jutaan, Ribuan, Jutaan, Miliaran)
	Mata Uang; Enum (USD, Dollar);
)

Table DataEmiten (
	Kode;
	Nama Emitem;
	Sektor;
	Tanggal date;
	NilaiSaham int;
)


Tabel Emitem(
	Kode;
	Nama Emitem;
	Sektor;
)
Table DataSaham (
	PK DataSaham;
	FK Kode;
	Tanggal date;
	NilaiSaham int;
)

select hasil * 100 AS Persen from (
select (select selisih / (select saham from saham where date(tanggal)='2019-06-03') from (
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih 
from saham where date(tanggal)='2019-06-03') AS Persen) AS hasil) AS HasilPersen;



Table Saham(
	PK Saham;
	FK Kode;
	JumlahSahamBeredar int;
	TanggalPencatatan date;
	Satuan;
)

Table Pasar(
	PK Pasar;
	FK Kode;
	Tanggal date;
	KapitalisasiPasar int;  // Adalah nilai dari HargaSaham diKali dengan JumlahSahamBeredar;
	HargaSaham int;
)

-- Table Jenis(

-- 	PK idJenis;
-- 	Kode
-- 	Revenue;
-- 	Profit;
-- )


-- Table DataProVenue2018(
-- 	FK Kode;
-- 	Fk idJenis;
-- 	Q1;
-- 	Q2;
-- 	Q3;
-- 	Tahunan;
-- )




pk r   p     Kode
1 400  300	 332
2 500  600

kode fk q1  q2  q3  Tahunan
332  2 



Table q1 (
	Kode;
	Tahun;
	Profit
	Revenue;
)


Table q2 (
	Kode;
	Tahun;
	Profit
	Revenue;
)

Table q3 (
	Kode;
	Tahun;
	Profit
	Revenue;
)
Table Tahunan (
	Kode;
	Tahun;
	Profit
	Revenue;
)


kode tahun pro  Revenue
322  2018  400  300

Select all from q1 where kode=322;
select all from q1;

select namaemtitem.emitem q1.-tahunan Revenue, Profit from
from q1 join emitem
on q1.kode = emitem.kode;



Ajax



select hasil * 100 AS Persen from (
select (select selisih / (select saham from saham where date(tanggal)='2019-06-03') from (
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih from saham where date(tanggal)='2019-06-03') AS Persen) AS hasil) AS HasilPersen;



select saham AS sebelum from saham where date(tanggal)='2019-06-03';
select saham AS sesudah from saham where date(tanggal)='2019-06-13';

select sebelum AS belum, sesudah AS sudah, sebelum - sesudah from (
select saham AS sebelum from saham where date(tanggal)='2019-06-03';)

select sebelum, saham - sebelum from (
select saham AS sebelum from saham where date(tanggal)='2019-06-03') 



//Pengurangan
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih from saham where date(tanggal)='2019-06-03';

select nilaisaham AS nilaitgl13 from dataemiten where date(tanggal)='2019-03-13';

select nilaisaham - (select nilaisaham AS nilaitgl13 from dataemiten where date(tanggal)='2019-03-13' and kode='BBNI') AS Selisih 
from dataemiten where date(tanggal)='2019-03-12' and kode='BBNI';


select EmployeeID, FirstName, LastName, City, Country
from employees where row(City, Country) in (select City, Country from customers);


select nilaisaham - (select nilaisaham AS nilaitgl13 from dataemiten where date(tanggal)='2019-03-13') AS Selisih
 from dataemiten where date(tanggal)='2019-03-12';
	



//Pembagian
select selisih / (select saham from saham where date(tanggal)='2019-06-03') from (
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih from saham where date(tanggal)='2019-06-03') AS Persen ;


#2
select (select selisih / (select saham from saham where date(tanggal)='2019-06-03') from (
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih from saham where date(tanggal)='2019-06-03') AS Persen) AS hasil;


select hasil * 100 AS Persen from (
select (select selisih / (select saham from saham where date(tanggal)='2019-06-03') from (
select saham - (select saham from saham where date(tanggal)='2019-06-13') AS Selisih from saham where date(tanggal)='2019-06-03') AS Persen) AS hasil) AS HasilPersen;


select hasil * 100 AS Persen from (
select (select selisih / (select nilaisaham from shm where date(tanggal)='2019-03-17') from (
select shm - (select nilaisaham from shm where date(tanggal)='2019-03-16') AS Selisih from shm where date(tanggal)='2019-03-17') AS Persen) AS hasil) AS HasilPersen;





Join Table

select emitem.nama, datasaham.nilai_saham - (select datasaham.nilai_saham from datasaham where date(tanggal)='2019-03-04') from DataSaham
join emitem on emitem.kode=datasaham.kode
where date(tanggal)='2019-03-03';


select emitem.nama, datasaham.nilai_saham from DataSaham
join emitem on emitem.kode=datasaham.kode
where date(tanggal)='2019-03-04'

select emitem.nama, datasaham.nilai_saham - 
(select datasaham.nilai_saham from datasaham where date(tanggal)='2019-03-04' and datasaham.kode='BBNI') AS selisih from DataSaham
join emitem on emitem.kode=datasaham.kode
where date(tanggal)='2019-03-03' and datasaham.kode='BBNI';


-- use dis
select selisih * 100 AS Persen from (select emitem.nama, datasaham.nilai_saham - 
(select datasaham.nilai_saham from datasaham where date(tanggal)='2019-03-03' and datasaham.kode='BBNI') AS selisih from DataSaham
join emitem on emitem.kode=datasaham.kode
where date(tanggal)='2019-03-04' and datasaham.kode='BBNI') as Hasil;




select datasaham.nilai_saham, dataemiten.saham_beredar from datasaham
join dataemiten on dataemiten.kode=datasaham.kode where datasaham.tanggal='2019-03-04' and dataemiten.kode='BBNI';