<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Estudiantes</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        
                   </div>
                   <h2>  Registro de Estudiante</h2>
                </div>
                <div class="signup-form">
                    
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Nombre</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Apellidos</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Direccion</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Numero Telefonico</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Selecciona un Provincia</label>
                                        <a href="#" class="form-link"></a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Santo Domingo">Provincias</option>
                                            <option value="Santo Domingo">Santo Domingo</option>
                                            <option value="Distrito Nacional">Distrito Nacional</option>
                                            <option value="Santiago">Santiago</option>
                                            <option value="San Cristóbal">San Cristóbal</option>
                                            <option value="La Vega">La Vega</option>
                                            <option value="Puerto Plata">Puerto Plata</option>
                                            <option value="San Pedro de Macorís">San Pedro de Macorís</option>
                                            <option value="Duarte">Duarte</option>
                                            <option value="La Altagracia">La Altagracia</option>
                                            <option value="La Romana">La Romana</option>
                                            <option value="San Juan">San Juan</option>
                                            <option value="Espaillat">Espaillat</option>
                                            <option value="Azua">Azua</option>
                                            <option value="Barahona">Barahona</option>
                                            <option value="Monte Plata">Monte Plata</option>
                                            <option value="Peravia">Peravia</option>
                                            <option value="Monseñor Nouel">Monseñor Nouel</option>
                                            <option value="Valverde">Valverde</option>
                                            <option value="Sánchez Ramírez">Sánchez Ramírez</option>
                                            <option value="María Trinidad Sánchez">María Trinidad Sánchez</option>
                                            <option value="Montecristi">Montecristi</option>
                                            <option value="Samaná">Samaná</option>
                                            <option value="Bahoruco">Bahoruco</option>
                                            <option value="Hermanas Mirabal">Hermanas Mirabal</option>
                                            <option value="El Seibo">El Seibo</option>
                                            <option value="Hato Mayor">Hato Mayor</option>
                                            <option value="Dajabón">Dajabón</option>
                                            <option value="Elías Piña">Elías Piña</option>
                                            <option value="San José de Ocoa">San José de Ocoa</option>
                                            <option value="Santiago Rodríguez">Santiago Rodríguez</option>
                                            <option value="Independencia">Independencia</option>
                                            <option value="Pedernales">Pedernales</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Sexo</label>
                                        <a href="#" class="form-link"></a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Hombre</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Mujer</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Otros</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Fecha de Nacimiento</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Nombre de la Madre</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Nombre del Padre</label>
                                    <input type="text" name="payable" id="payable" />
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>