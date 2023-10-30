<form action="resultado.calc.php" method="get">

    <label for="inputa">Valor A:</label>
    <input type="number" name="a" id="inputa">

    <br>

    <label for="inputb">Valor B:</label>
    <input type="number" name="b" id="inputb">

    <br>
    <br>

    <label for="operacao">Operação:</label>
    <select name="operacao" id="operacao">
        <option value="add">Adição</option>
        <option value="sub">Subtração</option>
        <option value="mult">Multiplicação</option>
        <option value="div">Divisão</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Calcular">

</form>