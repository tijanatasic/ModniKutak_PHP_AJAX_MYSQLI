<?php
    include "../classes/database.php";
    if(isset($_POST['korisnicko_ime_odeca']) && isset($_POST['komentar_odeca']) && isset($_POST['ocena_odeca'])){
    $values = array($_POST["korisnicko_ime_odeca"],$_POST["komentar_odeca"],$_POST["ocena_odeca"]);
    $crud=new Database();
    $crud->insert("odeca",$values);
    }

    if(isset($_POST['delete_id'])){
        $id=$_POST['delete_id'];
        $crud=new Database();
        $crud->delete("odeca",$id);
    }

    if(isset($_POST['komentar']) && isset($_POST['ocena'])){
        $korisnicko_ime=$_POST['korisnicko_ime'];
        $komentar=$_POST['komentar'];
        $ocena=$_POST['ocena'];
        $crud=new Database();
        $values = array($_POST["korisnicko_ime"],$_POST["komentar"],$_POST["ocena"],$_POST["id"]);
        $crud->update("odeca",$values);
    }

    if(isset($_POST['search_post_btn'])){
        $ime=$_POST['ime'];
        $crud=new Database();
        $query_run=$crud->select("odeca","id,korisnicko_ime,komentar,ocena","korisnicko_ime='$ime'");
        if($rowcount=mysqli_num_rows($crud->getResult())){
        if($query_run){
           ?> 
               <tr>
                <th scope="col"><h3>Ime</h3></th>
                <th scope="col"><h3>Komentar</h3></th>
                <th scope="col"><h3>Ocena</h3></th>
                <th scope="col"><h3>Izmeni</h3></th>
                <th scope="col"><h3>Obrisi</h3></th>
                </tr>
            </thead>
           <?php
            while($row=mysqli_fetch_array($crud->getResult())){
            ?>
   
                <tr id="<?php echo $row['id'];?>">
                        <td data-target="korisnicko_ime"><?php echo $row['korisnicko_ime'];?></td>
                        <td data-target="komentar"><?php echo $row['komentar']; ?></td>
                        <td data-target="ocena"><?php echo $row['ocena']; ?></td>
                        <td><a href="#" data-role="update" data-id="<?php echo $row['id']?>"><button type="button" class="btn btn-primary" name="izmeni" id="izmeni" >Izmeni</button></a></td>
                        <td><button onClick="deleteAjax(<?php echo $row['id'] ?>)" type="button" class="btn btn-danger" name="obrisi" id="obrisi">Obrisi</button></td>
                </tr>
                <?php
            }
        }
        }else{
            echo '<script> alert("Nema komentara za uneto korisnicko ime");</script>';
        }
   }

   if(isset($_POST['btn'])){
    $crud=new Database();
    $query_run=$crud->select("odeca","id,korisnicko_ime,komentar,ocena",null,"ocena DESC");
    ?>
    <thead>
    <tr>
      <th scope="col"> <h3>Ime</h3> </th>
      <th scope="col"><h3>Komentar</h3></th>
      <th scope="col"><h3>Ocena</h3></th>
    </tr>
  </thead>
  <?php

    while($row=mysqli_fetch_array($crud->getResult())){
        ?>
        <tr>
            <td><?php echo $row['korisnicko_ime'] ?></td>
            <td><?php echo $row['komentar'] ?></td>
            <td><?php echo $row['ocena'] ?></td>
        </tr>
        <?php } 
        
   }
    

?>