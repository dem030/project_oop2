<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Registrazione</h1>
      <form method="post" action="../backend/register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="nome" id="nome" placeholder="Nome" required>
           <label for="nome">Nome</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="cognome" id="cognome" placeholder="Cognome" required>
            <label for="cognome">Cognome</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-group">
            <i class="fas fa-id-card"></i>
            <input type="text" name="codice_conto" id="codice_conto" placeholder="Codice del Conto" required>
            <label for="accountNumber">codice del Conto</label>
        </div>
       <input type="submit" class="btn" value="Registrati" name="signUp">
      </form>
      <p class="or">
        ----------oppure--------
      </p>
      <div class="links">
        <p>Hai già un account?</p>
        <button id="signInButton">Accedi</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Accedi</h1>
        <form method="post" action="../backend/register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          
         <input type="submit" class="btn" value="Accedi" name="signIn">
        </form>
        <p class="or">
          ----------oppure--------
        </p>
        <div class="links">
          <p>Non hai ancora un account?</p>
          <button id="signUpButton">Registrati</button>
        </div>
      </div>
      <script src="../login/script.js"></script>
</body>
</html>
