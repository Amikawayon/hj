<?php include_once ROOT . '/views/header.php'; ?>
<body>

  <div class='first-container container-fluid px-0'>
    <!--   ABSOLUTES -->
    
    <a href="#"><img src="/assets/img/background/logo.jpg" alt="..." class="logo position-fixed "></a>
      
    <!-- /    ABSOLUTES       -->

    <!-- navbar  -->
     <p class="mb-5 fixet-top bg-info navbar  ">  </p>
     <!-- / navbar   -->


    <div class='container'>

      <!-- НАЧАЛО  -->

      <!-- FORM -->

      <form id="form" class="form mb-5 border border-primary p-2 position-relative ">
        <!-- email --> 

        <div class="form-row">
          <div class="form-group col-sm-6 col-md-5">
            <label for="input-email">
              Ваша почта
            </label>
            <input id="input-email" type="email" name="email" class="form-control">
          </div>

          <!-- /email -->


           <!-- name -->

          <div class="form-group col-sm-6 offset-md-2 col-md-5">
            <label for="input-name">
              Ваше имя
            </label>
            <input id="input-name" minlength="6" type="text" name="name" class="form-control">
          </div>

           <!-- /name -->
         </div>
           <!-- msg -->

        <div class="form-group">
          <label for="input-msg">Ваш отзыв о нашей компании</label>
          <input  id="input-msg" type="text" minlength="4" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="msg">
          <small id="passwordHelpBlock" class="form-text">
            Пожалуйста, введите ваш отзыв.

          </small>
        </div>
        <input type="hidden" name="hiddenInput" value="1">

        <!-- submit -->
        <button id="hidden" type="submit" hidden>catch me if u can</button>
        <button class="btn btn-success btn-send" type="button" id="btn-send">Отправить форму</button>
        


        <!-- /submit -->
      </form>

        <!-- /msg -->


        <!-- /form -->

        <!-- full image -->

      <img id="background" src="/assets/img/background/0.svg" alt="..." class=" img-thumbnail w-100 backgroundImage ">
    
        <!--  / full image  -->


      <!--  ОТЗЫВЫ -->
    </div>
  </div>

  <!-- / first container-fluid -->


  <!-- second containers -->
  <div class="wrapper px-0 position-relative container-fluid">

    <!-- background -->
    <img class="second-img wrapper position-absolute" src="/assets/img/background/backgroundColor.svg">
    <!-- /background -->
    <div class="container bg-info border border-rounded border-primary">

      <!-- comments block -->
      <div id="comments" class="alert pb-0 alert-dark w-75 mx-auto comments">
        <!-- heading -->
          <div class=" row comments-heading my-3 ">
              <h4 class="col-9  col-md-7"><small >Отзывы наших <i>клиентов</i></small>
              </h4>
              <div class="heading-wrapper">
                  <p class="h4 brand col-2 col-md-4">Создаём<span class="badge badge-primary">Сайты</span>
                  </p>
              </div>
          </div>
      </div>
     
        
    <!-- </div> -->
        <!-- /heading -->
      <!--   <div class="container"> -->
        <table  class="table table-dark table-hover comments-content">
          <thead class="thead-light">
            <tr>
              <td colspan="2">Отзывы</td>
              <td>Email</td>
              <td>Имя</td>
            </tr>
          </thead>
          <tbody id="output">
            <?php include_once 'store.php'; ?>
          </tbody>
          

        </table>
        </div>
        
      </div>
      <!-- /comments block -->
    </div>
    <!-- /container -->

  </div>        
           

        
  
   
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include_once ROOT . '/assets/bs4/bs4Js.php'; ?>
    <?php include_once ROOT . '/views/footer.php'; ?>
  </body>
</html>
 