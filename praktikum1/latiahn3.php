<?php
$ns1 = ['id'=>1, 'nim'=>'01111','uts'=>80,'tugas'=>78];
$ns2 = ['id'=>1, 'nim'=>'01111','uts'=>80,'tugas'=>79];
$ns3 = ['id'=>1, 'nim'=>'01111','uts'=>80,'tugas'=>80];
$ns4 = ['id'=>1, 'nim'=>'01111','uts'=>80,'tugas'=>81];
$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>TUGAS<rth>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_nilai as $ns) {
            echo "<tr><td>" . $no . "</td>";
            echo "<td>" . $ns['nim']. "</td>";

            echo "</tr >";
            $no++;
        }
        ?>
    </tbody>
</table>
