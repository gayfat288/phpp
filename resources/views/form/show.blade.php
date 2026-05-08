<form action="" method="POST">
    {{ csrf_field() }}
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit">
</form>