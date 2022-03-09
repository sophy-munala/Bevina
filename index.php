<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom Style -->
      <link rel="stylesheet" type="text/css" href="index.css">

    <title>Invoice..!</title>
    <style type="text/css">
      .page[size="A4"]{
  width: 23cm;
  height: 30.7cm;
  overflow: hidden;
}
     
      .hr3{
        border-top: 5px double #FF0000;
      }
      .hr2{
        width: 500px;
        margin-left: auto;
        margin-right: auto;
      }
      .p3{
        font-size: 20px;
      }
      .square{
      height: 250px;
      width: 200px;
      background-color: #007FFF;
      float: right;
      }
      .text{
        width: 500px;
        height: 500px;
        font-size:35px ;
        color: white;
      }
      .inv{
        width: 200px;
        width: 200px;
        font-size: 15px;
        color: white;
      }
      table, td, th{
        border: 1px solid #ddd;
        text-align: left;
      }
      table.ex1{
        empty-cells: show;
      }
      table{
        border-collapse: collapse;
        width: 100%;
      }
      th, td{
        padding: 10px;
      }
      tr: nth-child(even){background-color: #f2f2f2}
      th{
        background-color: #007FFF;
        color: white;
      }
      #footer{
        display: none;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0px;
        font-size: 15px;
        background-color: #f2f2f2;
        border-top: 1px solid #E6E6E6;
      }
      h5{
        text-align: right;
      }
    </style>
  </head>

  <body>
    <div class="my-5 page" size="A4">
      <div class="p-5">
            <img src="bev.jpeg">
            <h5>Eastern By-Pass Road, Ruiru <br/>
                P. O. Box 52158 -00100 Nairobi, Kenya <br> TEL: +254 725 755 554/ +254 724 113 153 <br> Email : bevinaltd@gmail.com</h5>
           
            <hr class="hr3">
            <br>
            <hr class="hr2"/>

            <div class="square">
              <div class="text"><h3>INVOICE</h3>
                <div class="inv"><p class="p3">Invoice Date:<br><br>Due Date:</p></div>  
              </div>
            </div>
            <br><br>
            <div class="contain">
              <p class="p3">Delivered to:...................................................</p>....................................................................................................................<br><br>
              <p class="p3">Delivery Note No:................................................</p>...................................................................................................................<br>
            </div>
            <br><br>
            <br>
            <table class="ex1" >
              <tr>
                <th><b>ID</b></th>
                <th><b>Description</b></th>
                <th><b>Qty</b></th>
                <th><b>Price</b></th>
                <th><b>Total</b></th>
              </tr>
              <tr>
                <td>01</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>02</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>03</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>04</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>05</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>06</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
              
              <tr><td colspan="4"><b>Sub Total</b></td></tr>
              <tr><td colspan="4"><b> Total</b></td></tr>
            </table>
            <div id="footer">
              Accounts are due for settlemt.
            </div>
            

           
    </div>
  </div>

  </body>
</html>
