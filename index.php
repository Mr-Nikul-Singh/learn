<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevOps Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #0f172a; color: white; line-height: 1.6; }

    header {
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient(135deg, #1e293b, #0f172a);
    }
    header h1 { font-size: 3rem; }
    header p { margin: 15px 0; color: #cbd5f5; }
    .btn {
      padding: 12px 25px;
      border-radius: 30px;
      background: #3b82f6;
      border: none;
      color: white;
      cursor: pointer;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 15px 40px;
      background: #020617;
      position: sticky;
      top: 0;
    }

    section { padding: 60px 40px; }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #1e293b;
      padding: 20px;
      border-radius: 15px;
      text-align: center;
    }

    .workflow {
      text-align: center;
    }

    .contact {
      text-align: center;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #020617;
      color: #94a3b8;
    }
  </style>
</head>
<body>

<nav>
  <h2>DevOps</h2>
  <div>Home | Services | Contact</div>
</nav>

<header>
  <h1>DevOps Engineer Portfolio 🚀</h1>
  <p>Automate | Deploy | Scale</p>
  <button class="btn">Hire Me</button>
</header>

<section>
  <h2>Services</h2>
  <div class="grid">
    <div class="card"><h3>Docker</h3><p>Containerization</p></div>
    <div class="card"><h3>Jenkins</h3><p>CI/CD Automation</p></div>
    <div class="card"><h3>AWS</h3><p>Cloud Deployment</p></div>
  </div>
</section>

<section>
  <h2>About Me</h2>
  <p>DevOps Engineer with 8+ years of Linux experience. Skilled in Docker, Jenkins, and CI/CD pipelines.</p>
</section>

<section class="workflow">
  <h2>Workflow</h2>
  <p>Code → Build → Test → Deploy → Monitor</p>
</section>

<section class="contact">
  <h2>Contact</h2>
  <p>Email: your@email.com</p>
</section>

<footer>
  <p>© 2026 DevOps Portfolio</p>
</footer>

</body>
</html>
