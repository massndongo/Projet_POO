<!DOCTYPE html>
 <html>
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../public/css//bootstrap.css">
        <style>
          .input,.btn{
                  width: 80%;
                  height:50px;
                }
        </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
     </head>
     <body>
             <form>
                 <div class="form-group p-3 ">
                  
                   <input type="text" class="form-control input" id="nom" placeholder="NUMERO CHAMBRE">
                 </div>
                 
                 <div class="form-group p-3">
                  
                   <input type="number" class="form-control input" id="email" placeholder="NUMERO BATIMENT">
                 </div>
                 
                 <div class="form-group p-3">
                   <select id="selection" class="form-control input">
                     <option value="">Liste de choix...</option>
                     <optgroup label="Groupe d'options 1">
                     <option value="">INDIVIDUEL</option>
                       <option value="">A DEUX</option>
                       
                     </optgroup>
                   </select>
                 </div>
                 <div class="form-group p-5"> 
                  <button class="btn btn-primary" type="submit">Enregistrer</button>
                 </div>
             </form>
    </body>
</html>