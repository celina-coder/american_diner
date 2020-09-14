<?php include 'header.php'; ?>
    <main class="container">
        <p class="connect"> Connexion administrateur :</p>
            <form class="connexion" action="admin/login.php" method="post">
                <div class="input">
                    <label class="email" for="name">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="input">
                    <label class="password" for="name">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="input submit">
                    <input class="connect_input" type="submit" value="Connecter">
                </div>
            </form>
         </main>
    </body>
</htm>

