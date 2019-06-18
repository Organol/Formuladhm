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
	Aset;
	Liabilitas;
	Modal/Ekuitas;
	Satuan; Enum (Penuh, Jutaan, Ribuan, Jutaan, Miliaran)
	Mata Uang; Enum (USD, Dollar);
)

Table DataSaham (
	PK DataSaham;
	FK Kode;
	Tanggal date;
	NilaiSaham int;
	Selisih int; //Pengurangan dari Nilai pada Tanggal tertentu dengan tanggal lain contoh tanggal A - Tanggal B
	Persen (%) float; // Nilai Persen adalah nilai pembagian Nilai Selisih dengan Tanggal B   Selisih/Tanggal B 
)

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





