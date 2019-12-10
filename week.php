<?php
require_once "lib/autoload.php";

BasicHead();
ShowMessages();
?>
<body>

<div class="jumbotron text-center">
    <h1>Weekoverzicht</h1>
</div>

<?php PrintNavBar(); ?>

<div class="container">
<?php
require_once 'lib/week.php';
printDate();
echo date("W", strtotime('2019-12-3'));

$data = GetData("select * from taken");
$template = LoadTemplate("weekoverzicht");
print ReplaceContent( $data, $template);

?>
</div>

</body>
</html>