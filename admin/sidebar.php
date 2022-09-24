<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <?php

          require 'config/conexao.php';
          
          $usuariologado = $_SESSION['usuario'];

          $sql = "SELECT * FROM usuario WHERE usuario = '$usuariologado'";
          $result = mysqli_query($conexao, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        
        <div class="info">
          <a href="#" class="d-block"><?=$row["usuario"];?></a>
        </div>

        <?php 
          }
            } else {
                echo "Nenhum resultado encontrado!";
            }
        ?>

      </div>