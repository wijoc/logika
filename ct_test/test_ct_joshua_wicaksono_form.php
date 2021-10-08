<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Proses submit -->
    <?php
        /** Method POST */
        if (isset($_POST['save']) && $_POST['save'] == 'Show Post') {
            $postArr = array(
                'nama'          => $_POST['postNama'],
                'telp'          => (substr_count($_POST['postTelp'], '+62') > 0)? $_POST['postTelp'] : '+62'.$_POST['postTelp'],
                'jenis_kelamin' => $_POST['postJK'],
                'alamat'        => $_POST['postAlamat'],
            );
            
            echo "<h2>Hasil POST : </h2>";
            echo "Nama : ".$postArr['nama']."\n";
            echo "Telp : ".$postArr['telp']."\n";
            echo "Jenis Kelamin : ".$postArr['jenis_kelamin']."\n";
            echo "Alamat : ".$postArr['alamat']."\n";
        } else if (isset($_GET['save']) && $_GET['save'] == 'Show Get'){
            $postArr = array(
                'nama'          => $_GET['postNama'],
                'telp'          => (substr_count($_GET['postTelp'], '+62') > 0)? $_GET['postTelp'] : '+62'.$_GET['postTelp'],
                'jenis_kelamin' => $_GET['postJK'],
                'alamat'        => $_GET['postAlamat'],
            );
            
            echo "<h2>Hasil GET : </h2>";
            echo "Nama : ".$postArr['nama']."\n";
            echo "Telp : ".$postArr['telp']."\n";
            echo "Jenis Kelamin : ".$postArr['jenis_kelamin']."\n";
            echo "Alamat : ".$postArr['alamat']."\n";
        }
    ?>

    <!-- Form Method Post -->
    <hr style="border: 1px solid red;">
    <h2>Form POST :</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="postNama" id="input-p-nama" placeholder="Nama..."></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="postTelp" id="input-p-telp" placeholder="Telp..."></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="postJK" id="input-p-jk">
                        <option value="">-- Pilih jenis kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="postAlamat" id="input-p-alamat" cols="20" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="Show Post"></td>
                <td><button type="reset">Reset</button></td>
            </tr>
        </table>
    </form>

    <h2>Form GET :</h2>
    <form method="GET" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="postNama" id="input-p-nama" placeholder="Nama..."></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="postTelp" id="input-p-telp" placeholder="Telp..."></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="postJK" id="input-p-jk">
                        <option value="">-- Pilih jenis kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="postAlamat" id="input-p-alamat" cols="20" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="Show Get"></td>
                <td><button type="reset">Reset</button></td>
            </tr>
        </table>
    </form>


    <hr style="border: 1px solid red;">
    <h2>JQuery</h2>
    <button id="jquery-click">Click Me !</button>
    <table id="table-json" style="border: 1px solid black;">
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#jquery-click").on("click", function(event){
                event.preventDefault()  
                $.ajax({
                    url     : 'https://jsonplaceholder.typicode.com/comments',
                    method  : 'get',
                    cache   : false,
                    contentType : false,
                    processData : false,
                    datatype    : 'json',
                    beforeSend  : function(){
                        $(this).prop("disabled", true)
                    },
                    success : function(data){
                        console.log(data)
                        var output = ''
                        for(index in data){
                            output += `<tr style="border: 1px solid black;">
                            <td style="border: 1px solid black;">`+ data[index].body +`</td>
                            <td style="border: 1px solid black;">`+ data[index].email +`</td>
                            <td style="border: 1px solid black;">`+ data[index].id +`</td>
                            <td style="border: 1px solid black;">`+ data[index].name +`</td>
                            <td style="border: 1px solid black;">`+ data[index].postId +`</td>
                            </tr>`
                        }
                        $("#table-json").html(output)
                    }
                })
            })
        })
    </script>
</body>
</html>