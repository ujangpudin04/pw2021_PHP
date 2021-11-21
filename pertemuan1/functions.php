<?php 
function koneksi()
{
    // konek db
 return mysqli_connect("localhost","root","","phpdasar");
}

function query($query)
{
    $conn=koneksi();
    $result=mysqli_query($conn,$query);

    // jika data hanya 1 maka tampilkan data
    if (mysqli_num_rows($result)==1) {
        return mysqli_fetch_assoc($result);
    }

    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
return $rows;
}

?>