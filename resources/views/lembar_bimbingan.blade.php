<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <img src="img/kop_.png" alt="" class="img-fluid" width="100%">
    </div>

	<div class="container">

        <table width="13%">
            <tr>
                <td>No</td>
                <td>:</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td>:</td>
            </tr>
        </table>
        <p>
            <table align="left">
                <tr>
                    <td>Kepada Yth.</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: right"> <b>Kepala&nbsp;</b> </td>
                    <td id="nm_instansi" contenteditable="true" style="font-weight: bold"></td>
                </tr>              
                <tr>
                    <td>di-</td>
                </tr> 
                <tr>
                    <td style="text-align: right">Tempat</td>
                </tr>
    
            </table>
        </p>
    
        <br><br><br><br><br><br>
        <p style="text-align: justify; text-justify: inter-word">
            <i><b>Assalamu’alaikum Wr. Wb.</b></i><br>
                &nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan adanya kegiatan Mata Kuliah Kerja Praktek (KP) Fakultas Teknik
                dan Ilmu Komputer Universitas Sains Al-Qur’an (UNSIQ) Jawa Tengah di Wonosobo, 
                maka yang bertanda tangan di bawah ini: 
        </p>

        <table style="font-weight: bold">
            <tr>
                <td width="80">Nama</td>
                <td>:</td>
                <td id="nm_dosen" contenteditable="true">*input disini</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Jabatatan</td>
                <td>:</td>
                <td style="text-align: top" id="jabatan" contenteditable="true"></td>
            </tr>
        </table>
        <p style="text-align:justify;">
            <br>
            Dengan ini kami mohon kesediaan Bapak/ Ibu untuk memberikan ijin kepada 
            mahasiswa kami untuk melaksanakan Kerja Praktek (KP) di tempat yang bapak/ ibu pimpin.
            Adapun mahasiswa tersebut adalah:
        </p>
            
        <table>
            <tr>
                <td width="80">Nama</td>
                <td>:</td>
                <td id="nm_mhs" contenteditable="true"></td>
            </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td id="nim" contenteditable="true"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td id="prodi" contenteditable="true"></td>
        </tr>
       </table>

       <p style="text-align:justify;">
        Di samping itu, kami juga mohon kesediaaan Bapak/ Ibu untuk memberikan data dan memberikan bimbingan kepada mahasiswa kami sampai dengan Kerja Praktek selesai. Demikian surat permohonan ijin ini, atas kerjasamanya kami ucapkan terima kasih. 

        <i><b>Wassalamu’alaikum Wr.Wb.</b></i>
    </p>
    <br><br>
        <table align="right">
            <tr>
                <td align="center">Wonosobo, <?php echo date('d F Y'); ?></td>
            </tr>
            <tr>
                <td align="center">a.n Dekan</td>
            </tr>
            <tr>
                <td align="center">Wakil Dekan</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center"><div id="dekan">nananann dekane</div></td>
            </tr>
        </table>
	</div>

</body>
</html>