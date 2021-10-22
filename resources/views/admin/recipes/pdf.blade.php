<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de compra</title>
<style>
    body {
        /position: relative;/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /color: #555555;/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 14px;
        /font-family: SourceSansPro;/
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /text-align: justify;/
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        /position: relative;/ float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        background: #33AFFF;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #faproveedor {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #faproveedor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #faccomprador {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #faccomprador thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #33AFFF;
        color: white;
        text-align: center;
        line-height: 35px;
    }

    /* footer{
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #33AFFF;
        color: white;
        text-align: center;
        line-height: 35px;
    } */

</style>

<body>
    <main>

        <header>
            <p><strong>MediFix</strong></p>
        </header>

        <div class="container">
            <div>

                <table id="datos">
                    <thead>
                        <tr>
                            <th id="">RECETA MEDICAMENTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <p id="proveedor">
                                    Nombre: Stiven Pineda<br>
                                    Fecha: 22/10/2021
                                    Email: STIVEN@GMAIL.COM</p>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="fact">
                <p>MediFix<br />
                </p>
            </div>
        </div>
        <br>
        <section>
            <div>
                <table id="faccomprador">
                    <thead>
                        <tr id="fv">
                            <th>NOMBRE PACIENTE</th>
                            <th>CORREO ELECTRONICO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Stiven Pineda</td>
                            <td>STIVEN@GMAIL.COM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <br>
        <section>
            <div>
                <table id="facproducto">
                    <thead>
                        <tr id="fa">
                            <th>OBSERVACIONES</th>
                            <th>DIAGNOSTICO</th>
                            <th>NOMBRE PACIENTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{$recipe->observations}}</td>
                            <td>{{$recipe->diagnostic}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table id="facproducto">
                    <thead>
                        <tr id="fa">
                            <th>MEDICAMENTOS</th>
                            <th>INDICACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $detail)
                            <tr>
                                <td>{{$detail->medicine}}</td>
                                <td>{{$detail->instruction}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <br>
    </main>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
            <p id="encabezado">
                <b>MediFix</b><br>Clinica especializada en la tencion de usuario<br>Telefono: +12-823-611-8721<br>Email:
                contactenos@medifix.com

            </p>
        </div>
    </footer>
</body>

</html>
