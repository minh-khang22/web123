<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('qlsach/themsach')}}" method = "get">
        <table>
            <tr>
                <td >Nhập id</td>
                <td>Nhập thể loại</td>
            </tr>
            <tr>
                <td ><input type='text' name='1id'><br></td>
                <td><input type='text' name='1theloai'><br></td>
            </tr>         
        </table>
        <input type='submit' value='Lưu'>
        {{ csrf_field() }}
    </form>
</body>
</html>