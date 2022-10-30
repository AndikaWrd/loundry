<div class="footer">

     <span>Copy right @ 2022</span>

</div>
<script>
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
     'November', 'Desember'
];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var year = <?php echo date('Y') ?>

document.getElementById("date").innerHTML = " " + day + " " + months[month] + " " + year;
</script>