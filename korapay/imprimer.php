<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i>KoraPay
                  <small class="float-right">Date: 20/10/2020</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                De
                <address>
                  <strong>Bailleur</strong><br>
                  Yaounde, Yaounde I<br>
                  Essos<br>
                  Phone: (235) 658-34-06-98<br>
                  Email: djohnbalard@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
               Pour
                <address>
                  <strong>Locataire</strong><br>
                  Douala, Douala VII<br>
                  PK14<br>
                  Phone: (237) 658-34-06-98<br>
                  Email: john.doe@example.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Indentifiant #007612</b><br>
                <br>
                <b>Ordre ID:</b> 4F3S8J<br>
                <b>Delai de Paiement:</b> 2/22/2024<br>
                <b>Compte:</b> 968-34567
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Type</th>
                    <th>Code #</th>
                    <th>Description</th>
                    <th>Somme</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Studio</td>
                    <td>455-981-221</td>
                    <td>El snort testosterone trophy driving gloves handsome</td>
                    <td>$64.50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>chambre</td>
                    <td>247-925-726</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>$50.00</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Entrepot</td>
                    <td>735-845-642</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>$10.70</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Espace Commercial</td>
                    <td>422-568-642</td>
                    <td>Tousled lomo letterpress</td>
                    <td>$25.99</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">Mode de Paiement:</p>
                <img src="../../dist/img/credit/visa.png" alt="Visa">
                <img src="image/yup.jpeg" alt="Mastercard" width="60px">
                <img src="image/orange.png" alt="Orange money" width="30px">
                <img src="image/mtn.jpg" alt="Paypal" width="50px">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Veuillez choisir votre mode de transaction <br>
                  SVP
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <p class="lead">Delai du Versement 25/10/2020</p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Somme Precedente:</th>
                      <td>$250.30</td>
                    </tr>
                    <tr>
                      <th>Somme Actuelle:</th>
                      <td>$10.34</td>
                    </tr>
                    <tr>
                      <th>Reste:</th>
                      <td>$5.80</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>$265.24</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.php" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Imprimer</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Regler
                  Facture
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generer PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
