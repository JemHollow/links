<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <script
        src="https://www.paypal.com/sdk/js?client-id=BAAnpkJ71fmX2I3sDeNnVROLbVhQCEBa4jQPI_Pc1AF13I97U7hWkhm5b_XcDBYQ_Vw6kSNNvT8gee69vY&components=hosted-buttons&enable-funding=venmo&currency=USD">
        </script>
    <link rel="stylesheet" href="styles.css">
    <title>Jem Hollow</title>
</head>

<body>
    <div class="box">
        <?php include 'header.php';?>
        <div style="width: 100%">
            <a href="index.php"><button type="button" class="btn btn-dark margin">Return to
                    Links</button><br /></a>
        </div>
        <div style="width: 100%">
            <div id="paypal-container-HEBRVH739C7E4"></div>
            <script>
                paypal.HostedButtons({
                    hostedButtonId: "HEBRVH739C7E4",
                }).render("#paypal-container-HEBRVH739C7E4")
            </script>
        </div>
    </div>
</body>

</html>