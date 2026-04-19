<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nikul Singh Sharma | DevOps Engineer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600&display=swap');
    
    :root {
      --primary: 59 130 246;
    }
    
    body {
      font-family: 'Inter', system_ui, sans-serif;
    }
    
    .heading-font {
      font-family: 'Space Grotesk', sans-serif;
    }

    .hero-bg {
      background: linear-gradient(135deg, #0f172a 0%, #1e2937 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-bg::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: radial-gradient(circle at 30% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%);
      pointer-events: none;
    }

    .glass {
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-link {
      position: relative;
      transition: all 0.3s ease;
    }
    
    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background: rgb(var(--primary));
      transition: width 0.3s ease;
    }
    
    .nav-link:hover:after {
      width: 100%;
    }

    .card-hover {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
      transform: translateY(-12px) scale(1.03);
      box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.4);
    }

    .terminal-line {
      animation: typing 3.5s steps(40, end) forwards;
      overflow: hidden;
      white-space: nowrap;
    }

    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }

    .section-title {
      position: relative;
      display: inline-block;
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      width: 60%;
      height: 3px;
      background: linear-gradient(to right, rgb(var(--primary)), #a5b4fc);
      bottom: -8px;
      left: 0;
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-[#0a0f1c] text-white overflow-x-hidden">

  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center text-xl font-bold">🚀</div>
        <h1 class="text-2xl font-semibold heading-font tracking-tight">Nikul Singh</h1>
      </div>
      
      <div class="hidden md:flex items-center gap-8 text-sm font-medium">
        <a href="#about" class="nav-link">About</a>
        <a href="#skills" class="nav-link">Skills</a>
        <a href="#projects" class="nav-link">Projects</a>
        <a href="#workflow" class="nav-link">Workflow</a>
        <a href="#contact" class="nav-link">Contact</a>
      </div>
      
      <button onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })" 
              class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 rounded-2xl font-medium transition-all active:scale-95">
        Let's Talk
      </button>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden text-2xl">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-bg min-h-screen flex items-center pt-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <div class="space-y-8">
        <div class="inline-flex items-center gap-2 px-4 py-2 glass rounded-3xl text-sm">
          <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
          Available for freelance & full-time
        </div>
        
        <h1 class="text-6xl md:text-7xl font-bold leading-none heading-font tracking-tighter">
          DevOps Engineer<br>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Automate • Deploy • Scale</span>
        </h1>
        
        <p class="text-xl text-gray-300 max-w-md">
          8+ years building reliable, scalable infrastructure. 
          Expert in CI/CD, Kubernetes, AWS, and Infrastructure as Code.
        </p>
        
        <div class="flex flex-wrap gap-4">
          <button onclick="document.getElementById('projects').scrollIntoView({ behavior: 'smooth' })" 
                  class="px-8 py-4 bg-white text-black rounded-3xl font-semibold flex items-center gap-3 hover:shadow-2xl hover:shadow-blue-500/30 transition-all">
            View My Work
            <i class="fas fa-arrow-right"></i>
          </button>
          
          <button onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })" 
                  class="px-8 py-4 border border-white/30 hover:border-white/60 rounded-3xl font-medium transition-all">
            Download Resume
          </button>
        </div>
        
        <div class="flex items-center gap-8 text-sm">
          <div>
            <span class="block text-3xl font-semibold text-emerald-400">50+</span>
            <span class="text-gray-400">Pipelines Deployed</span>
          </div>
          <div>
            <span class="block text-3xl font-semibold text-emerald-400">99.99%</span>
            <span class="text-gray-400">Uptime Achieved</span>
          </div>
          <div>
            <span class="block text-3xl font-semibold text-emerald-400">15+</span>
            <span class="text-gray-400">Clients Worldwide</span>
          </div>
        </div>
      </div>
      
      <!-- Right side visual -->
      <div class="relative hidden md:block">
        <div class="glass rounded-3xl p-8 border border-white/10">
          <div class="bg-[#02040a] rounded-2xl p-6 font-mono text-sm overflow-hidden">
            <div class="flex items-center gap-2 mb-4 text-emerald-400">
              <i class="fas fa-terminal"></i>
              <span class="terminal-line">terraform apply --auto-approve</span>
            </div>
            <div class="text-gray-400 text-xs space-y-1">
              <div>✓ Infrastructure provisioned</div>
              <div>✓ 42 resources created</div>
              <div class="text-emerald-400">Deployment successful in 2m 14s</div>
            </div>
          </div>
        </div>
        
        <!-- Floating badges -->
        <div class="absolute -top-6 -right-6 glass px-6 py-3 rounded-2xl text-sm flex items-center gap-3 shadow-2xl">
          <i class="fas fa-cloud text-blue-400"></i>
          <div>
            <div class="font-medium">AWS • Azure • GCP</div>
            <div class="text-xs text-gray-400">Multi-cloud expert</div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center">
      <div class="text-xs tracking-widest mb-2">SCROLL TO EXPLORE</div>
      <div class="w-px h-12 bg-gradient-to-b from-transparent via-white/50 to-transparent"></div>
    </div>
  </header>

  <!-- About -->
  <section id="about" class="py-24 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="px-4 py-1.5 text-xs font-medium tracking-widest bg-white/5 rounded-full">CHAPTER 01</span>
        <h2 class="section-title text-5xl font-semibold heading-font mt-4">About Me</h2>
      </div>
      
      <div class="grid md:grid-cols-12 gap-12 items-center">
        <div class="md:col-span-5">
          <div class="glass rounded-3xl p-2">
            <img src="https://picsum.photos/id/1015/800/800" alt="Nikul Singh" 
                 class="rounded-3xl w-full aspect-square object-cover">
          </div>
        </div>
        <div class="md:col-span-7 space-y-8 text-lg">
          <p class="text-gray-300 leading-relaxed">
            Hi, I'm Nikul Singh — a passionate DevOps Engineer based in Jaipur, India. 
            With over 8 years of experience, I specialize in designing and implementing robust CI/CD pipelines, 
            container orchestration, and cloud infrastructure that powers high-traffic applications.
          </p>
          <p class="text-gray-300 leading-relaxed">
            I believe in automation-first culture and "you build it, you run it" philosophy. 
            Previously worked with fintech startups and enterprise clients to reduce deployment time from weeks to minutes.
          </p>
          
          <div class="grid grid-cols-2 gap-8 pt-8">
            <div>
              <div class="text-blue-400 font-medium mb-2">Currently Learning</div>
              <ul class="space-y-2 text-gray-300">
                <li class="flex items-center gap-2"><i class="fas fa-check text-emerald-400"></i> Platform Engineering</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-emerald-400"></i> GitOps with ArgoCD</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-emerald-400"></i> Observability (OpenTelemetry)</li>
              </ul>
            </div>
            <div>
              <div class="text-blue-400 font-medium mb-2">Fun Fact</div>
              <p class="text-gray-300">I once reduced infrastructure costs by 68% for a client by migrating from on-prem to serverless + Kubernetes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-24 bg-[#0f172a]">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="px-4 py-1.5 text-xs font-medium tracking-widest bg-white/5 rounded-full">CHAPTER 02</span>
        <h2 class="section-title text-5xl font-semibold heading-font mt-4">Core Expertise</h2>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Repeat for each skill -->
        <div class="glass rounded-3xl p-8 card-hover">
          <div class="text-4xl mb-6">🐳</div>
          <h3 class="text-2xl font-semibold mb-2">Docker &amp; Kubernetes</h3>
          <p class="text-gray-400">Containerization, orchestration, Helm charts, multi-cluster management</p>
        </div>
        
        <div class="glass rounded-3xl p-8 card-hover">
          <div class="text-4xl mb-6">🔄</div>
          <h3 class="text-2xl font-semibold mb-2">CI/CD Pipelines</h3>
          <p class="text-gray-400">Jenkins, GitHub Actions, GitLab CI, ArgoCD, Tekton</p>
        </div>
        
        <div class="glass rounded-3xl p-8 card-hover">
          <div class="text-4xl mb-6">☁️</div>
          <h3 class="text-2xl font-semibold mb-2">Cloud Platforms</h3>
          <p class="text-gray-400">AWS (EKS, ECS, Lambda), Azure AKS, GCP GKE</p>
        </div>
        
        <div class="glass rounded-3xl p-8 card-hover">
          <div class="text-4xl mb-6">📜</div>
          <h3 class="text-2xl font-semibold mb-2">IaC &amp; Automation</h3>
          <p class="text-gray-400">Terraform, Ansible, Pulumi, Crossplane</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="px-4 py-1.5 text-xs font-medium tracking-widest bg-white/5 rounded-full">CHAPTER 03</span>
        <h2 class="section-title text-5xl font-semibold heading-font mt-4">Featured Projects</h2>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="glass rounded-3xl overflow-hidden card-hover">
          <div class="h-56 bg-gradient-to-br from-blue-900 to-indigo-900 flex items-center justify-center text-6xl">🏦</div>
          <div class="p-8">
            <h3 class="text-2xl font-semibold">FinPay Banking Platform</h3>
            <p class="text-gray-400 mt-2 mb-6">Reduced deployment time by 90% with GitOps and multi-stage Kubernetes clusters.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Kubernetes</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">ArgoCD</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Terraform</span>
            </div>
          </div>
        </div>
        
        <!-- Add 2-3 more similar project cards -->
        <div class="glass rounded-3xl overflow-hidden card-hover">
          <div class="h-56 bg-gradient-to-br from-purple-900 to-pink-900 flex items-center justify-center text-6xl">🛒</div>
          <div class="p-8">
            <h3 class="text-2xl font-semibold">E-Commerce Microservices</h3>
            <p class="text-gray-400 mt-2 mb-6">Built zero-downtime CI/CD pipeline handling 10k+ deployments/month.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Jenkins</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Docker</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">AWS</span>
            </div>
          </div>
        </div>
        
        <div class="glass rounded-3xl overflow-hidden card-hover">
          <div class="h-56 bg-gradient-to-br from-emerald-900 to-teal-900 flex items-center justify-center text-6xl">📊</div>
          <div class="p-8">
            <h3 class="text-2xl font-semibold">Real-time Analytics Platform</h3>
            <p class="text-gray-400 mt-2 mb-6">Implemented observability stack with Prometheus + Grafana + Loki.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Prometheus</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">ELK</span>
              <span class="text-xs px-3 py-1 bg-white/10 rounded-full">Kafka</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Workflow -->
  <section id="workflow" class="py-24 bg-[#0f172a]">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="section-title text-5xl font-semibold heading-font mb-16">My DevOps Workflow</h2>
      <div class="grid md:grid-cols-5 gap-6">
        <div class="glass rounded-3xl p-10 card-hover">
          <div class="text-5xl mb-6">📝</div>
          <h4 class="font-semibold text-xl">Code</h4>
          <p class="text-sm text-gray-400 mt-3">Git • Branching Strategy</p>
        </div>
        <div class="glass rounded-3xl p-10 card-hover">
          <div class="text-5xl mb-6">🔨</div>
          <h4 class="font-semibold text-xl">Build</h4>
          <p class="text-sm text-gray-400 mt-3">Maven/Gradle • Docker</p>
        </div>
        <div class="glass rounded-3xl p-10 card-hover bg-blue-600/10 border border-blue-500/30">
          <div class="text-5xl mb-6">🧪</div>
          <h4 class="font-semibold text-xl">Test</h4>
          <p class="text-sm text-gray-400 mt-3">Unit • Integration • Security</p>
        </div>
        <div class="glass rounded-3xl p-10 card-hover">
          <div class="text-5xl mb-6">🚀</div>
          <h4 class="font-semibold text-xl">Deploy</h4>
          <p class="text-sm text-gray-400 mt-3">Blue-Green • Canary</p>
        </div>
        <div class="glass rounded-3xl p-10 card-hover">
          <div class="text-5xl mb-6">📈</div>
          <h4 class="font-semibold text-xl">Monitor</h4>
          <p class="text-sm text-gray-400 mt-3">Prometheus • Grafana • Alerting</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-24 border-t border-white/10">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-5xl font-semibold heading-font mb-6">Let's Build Something Great Together</h2>
      <p class="text-xl text-gray-400 mb-12">Open to exciting opportunities in DevOps, Cloud, and Platform Engineering.</p>
      
      <a href="mailto:akash.sharma.devops@gmail.com" 
         class="inline-flex items-center gap-4 text-2xl bg-gradient-to-r from-blue-600 to-indigo-600 px-12 py-8 rounded-3xl hover:scale-105 transition-transform">
        <i class="fas fa-envelope"></i>
        akash.sharma.devops@gmail.com
      </a>
      
      <div class="mt-16 flex justify-center gap-8 text-3xl">
        <a href="#" class="hover:text-blue-400 transition-colors"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-blue-400 transition-colors"><i class="fab fa-github"></i></a>
        <a href="#" class="hover:text-blue-400 transition-colors"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </section>

  <footer class="bg-black/50 py-12 text-center text-gray-500 text-sm">
    © 2026 Nikul Singh • Crafted with ❤️ for the DevOps community
  </footer>

  <script>
    // Tailwind script already loaded via CDN
    // Simple mobile menu toggle (expandable)
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
      alert("Mobile menu would open here in a full version.\n\nAdd your links: About, Skills, Projects, etc.");
    });

    // Smooth scroll for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        if (this.getAttribute('href') !== '#') {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });

    // Optional: Add scroll-based navbar effect
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
        nav.classList.add('shadow-2xl', 'bg-[#0a0f1c]/90');
      } else {
        nav.classList.remove('shadow-2xl', 'bg-[#0a0f1c]/90');
      }
    });
  </script>
</body>
</html>
