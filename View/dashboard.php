<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-W5wd5Wm+DkOYCY2QUBQjsLK0VjF9/ATZ0/zfVoDBg4O1+aIyLj+U6NfnZe6fSb6VpRGJGOkH9XsTliFmP+gG0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/View/css/modal.css">
    <link rel="stylesheet" href="/View/css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <!--
        <aside id="navbar1_y">
            <ul>
                <li>Item1</li>
                <li>Item2</li>
                <li>Item3</li>
                <li>Item4</li>
                <li>Item5</li>
                <li>Item6</li>
                <li>Item7</li>
                <li>Item8</li>
            </ul>
        </aside>
        -->
        <div id="right">
            <div>
                <h1>Configuraçoes</h1>
                <div id="navbar2_y">
                    <aside>
                        <ul>
                            <li class="item_navbar2_y">
                                <span>
                                    <!--<i class="fa fa-eye-dropper"></i>-->
                                    <h4>Aparencia</h4>
                                    <p>Tema escuro ou claro</p>
                                </span>
                            </li>
                            <li class="item_navbar2_y">
                                <!-- <i class="fas fa-home"></i> -->
                                <span>
                                    <h4>Seu Restaurante</h4>
                                    <p>Tema escuro ou claro</p>
                                </span>
                            </li>
                            <li class="item_navbar2_y">
                               <!-- <i class="fas fa-bell"></i>-->
                                <span>
                                    <h4>Notificacoes</h4>
                                    <p>Personalize suas notificacoes</p>
                                </span>
                            </li>
                            <li class="item_navbar2_y">
                                <!--<i class="fas fa-cogs"></i>-->
                                <span>
                                    <h4>Gestao De Produtos</h4>
                                    <p>Gerir Produtos, preco, etc</p>
                                </span>
                            </li>
                            
                            <li class="item_navbar2_y">
                                <!--<i class="fas fa-eye"> </i>-->
                                <span>
                                    <h4>Sobre nós</h4> 
                                    <p>Saiba mais acerca de nós</p>
                                </span>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div id="content">
                    <div>
                        <div id="header">
                            <div>
                                <h2>Gestão De Produtos</h2>
                            </div>
                            <span id="wrap_category">
                                <button id="category">
                                    <i class="fas fa-cog"></i>
                                    Gerir Categorias
                                </button>
                                <div id="modal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h2>Categorias</h2>
                                    <div id="register_container">
                                        <select name="" id="">
                                            <option value="alimento">Alimento</option>
                                            <option value="bebida">Bebida</option>
                                        </select>
                                        <input type="text">
                                        <button>Save</button>
                                    </div>
                                    
                                    <table>
                                    <table class="table table-bordered table-hover rounded">
                                        <thead>
                                            <tr>
                                            <th>Subcategoria</th>
                                            <th>Categoria</th>
                                            <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>João</td>
                                                <td>25</td>
                                                <td>
                                                    <button class="btn-delete"><i class="fas fa-trash"></i> Eliminar</button>
                                                    <button class="btn-edit"><i class="fas fa-edit"></i> Editar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maria</td>
                                                <td>30</td>
                                                <td>
                                                    <button class="btn-delete"><i class="fas fa-trash"></i> Eliminar</button>
                                                    <button class="btn-edit"><i class="fas fa-edit"></i> Editar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pedro</td>
                                                <td>45</td>
                                                <td>
                                                    <button class="btn-delete"><i class="fas fa-trash"></i> Eliminar</button>
                                                    <button class="btn-edit"><i class="fas fa-edit"></i> Editar</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>                                
                            </span>
                        </div>
                        <ul id="nav_barx">
                            <li>
                               <a href="">Hot Dishes</a>
                               <span class="underscor"></span>
                            </li>
                            <li>
                                <a href="">Cold Dishes</a>
                                <span class="underscor"></span>
                            </li>
                            <li>
                                <a href="">Soup</a>
                                <span class="underscor"></span>
                            </li>
                            <li>
                                <a href="">Grill</a>
                                <span class="underscor"></span>
                            </li>
                            <li>
                                <a href="">Appetizer</a>
                                <span class="underscor"></span>
                            </li>
                            <li>
                                <a href="">Dessert</a>
                                <span class="underscor"></span>
                            </li>
                        </u>
                    </div>
                    <div id="food_list">
                        <span class="food_item" id="add_food">
                            <span id="add_food_btn">
                                
                                <div id="open-modal-btn1">
                                    <i id="icon" class="fas fa-plus"></i>
                                    <h3>Add New Dish</h3>
                                </div>
                                
                                    <div id="modal1" class="modal1">
                                        <div class="modal-content1">
                                            <span class="close1">&times;</span>
                                            <div class="card">
                                                <div class="card-body">
                                                    <form id="form_img">
                                                        <div class="form-group">

                                                            <span onclick="document.getElementById('file').click();" id="add_food_btn">
                                                                <i id="icon" class="fas fa-plus"></i>
                                                                <h3>Carregue o Ficheiro</h3>
                                                            </span>

                                                            <input type="file" id="file" class="form-control-file" accept="image/*" onchange="loadFile(event)" style="display:none;">

                                                        </div>
                                                       
                                                    </form>
                                                </div>
                                                <img id="preview" src="#" alt="Pré-visualização da imagem" style="display:none; max-width:100%">
                                                        
                                            </div>
                                            <div id="fields_product">
                                                    <input class="add_product" type="text" placeholder="Descrição">
                                                    <input class="add_product" type="number" placeholder="Quantidade">
                                                    <input class="add_product" type="number" placeholder="Preco Unitário">
                                                    <select name="" id="select_category">
                                                        <option value="">Bebida</option>
                                                        <option value="">Alimento</option>
                                                    </select>
                                                    <button id="save_food">Salvar</button>
                                            </div>
                                        </div>
                                    </div>

                            </span>
                        </span>
                        
                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>
                        
                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <span class="food_item" id="food_description">
                            <span id="wrap_img">
                                <img src="/View/css/Images.png" alt="">
                            </span>
                            <span>
                                <p>
                                    Spicy seasoned <br>
                                    seafood noodles
                                </p><br>
                                <span id="price_quantity">
                                    <p>$ 2.29</p>
                                    <span id="dot"></span>
                                    <p>20 Bowls</p>
                                </span>

                            </span>
                            <span id="wrap_btnEdit">
                                <button>Edit Dish</button>
                            </span>
                        </span>

                        <ul id="actions">
                            <button id="discard">Discard Changes</button>
                            <button id="save"> Save Changes</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

        // Obtém o botão para abrir a janela modal
        var openModalBtn = document.getElementById("category");
        // Quando o usuário clicar no botão, abra a janela modal
        openModalBtn.onclick = function() {
            modal.style.display = "block";
        }
        
        // Obtém a janela modal
        var modal = document.getElementById("modal");

        // Obtém o botão para fechar a janela modal
        var closeModalBtn = document.getElementsByClassName("close")[0];
        // Quando o usuário clicar no botão para fechar, feche a janela modal
        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        // Quando o usuário clicar fora da janela modal, feche-a
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        // Obtém o botão para abrir a janela modal
        var openModalBtn1 = document.getElementById("open-modal-btn1");

        // Obtém a janela modal
        var modal1 = document.getElementById("modal1");

        // Obtém o botão para fechar a janela modal
        var closeModalBtn1 = document.getElementsByClassName("close1")[0];

        // Quando o usuário clicar no botão, abra a janela modal
        openModalBtn1.onclick = function() {
            modal1.style.display = "block";
        }

        // Quando o usuário clicar no botão para fechar, feche a janela modal
        closeModalBtn1.onclick = function() {
            modal1.style.display = "none";
        }

        // Quando o usuário clicar fora da janela modal, feche-a
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }


        var loadFile = function(event) {
            var preview = document.getElementById('preview');
            document.getElementById('form_img').display = "none"
            preview.style.display = "block";

            preview.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
</body>
</html>