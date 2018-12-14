<?php
ob_start();
session_start();

if(!empty($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){
    header("Location: index.php");
}
?>

<?php include 'components/header.php'; ?>

      <section class="login">
         <div class="content">
            <img class="logo" src="assets/images/esper.png" alt="Logo - LD" />

            <form action="user.php?action=login" method="post">
               <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Senha" value="" />
               </div><!-- .form-group -->
                <?php if(!empty($_GET['error']) && $_GET['error'] == 1){ ?>
                    <div style="color: red;">Senha Incorreta! Tente Novamente</div>
                <?php } ?>
               <input type="submit" class="botao" value="ACESSAR" />
            </form>
         </div><!-- .content -->
      </section><!-- .login -->

<?php include 'components/footer.php'; ?>

<?php
ob_end_flush();
?>