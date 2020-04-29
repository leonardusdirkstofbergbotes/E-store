    <aside>    
        <form id="select_categ">
            <!-- Hat section -->
            <div class="selector">
                <button><img src="./img/icons/hat.png"></button>
                <p class="hover">Hats</p>
                <div id="hats" class="choose">
                    <button onclick="select()"><label><input type="radio" name="prod_categ" value="hats M">Male</label></button>
                    <hr>
                    <button onclick="select()"><label><input type="radio" name="prod_categ" value="hats F">Female</label></button>
                </div>
            </div>

             <!-- Shirt section -->
             <div class="selector">
             <button><img src="./img/icons/shirt.png"></button>
                <p class="hover">Shirt</p>
                <div id="shirt" class="choose">
                <button onclick="select()"><label><input type="radio" name="prod_categ" value="shirts M">Male</label></button>
                    <hr>
                    <button onclick="select()"><label><input type="radio" name="prod_categ" value="shirts F">Female</label></button>
                </div>
            </div>

             <!-- pants section -->
             <div id="pants" class="selector">
                <button><img src="./img/icons/pants.png"></button>
                <p class="hover">Pants</p>
                <div id="pants" class="choose">
                <button onclick="select()"><label><input type="radio" name="prod_categ" value="pants M">Male</label><button>
                    <hr>
                <button onclick="select()"><label><input type="radio" name="prod_categ" value="pants F">Female</label></button>
                </div>
            </div>

             <!-- Shoes section -->
             <div id="shoe" class="selector">
                <button><img src="./img/icons/shoe.png"></button>
                <p class="hover">Shoes</p>
                <div id="shoes" class="choose">
                <button onclick="select()"><label><input type="radio" name="prod_categ" value="shoes M">Male</label></button>
                    <hr>
                <button onclick="select()"><label><input type="radio" name="prod_categ" value="shoes F">Female</label></button>
                </div>
            </div>
        </form>
    </aside>
