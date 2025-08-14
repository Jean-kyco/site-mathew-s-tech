<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mathew's Technology</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <script src="script.js"></script>

  <header class="header">
    <img src="Logo Mathew's.jpg" alt="Logo Mathew's" class="logo">
    <h1>Mathew's Technology</h1>
    <p>Institut d'informatique - Formations modernes & accessibles</p>
    <nav>
      <ul class="nav">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#cours">Cours</a></li>
        <li><a href="#evenements">Événements</a></li>
        <li><a href="#reussites">Réussites</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#carrieres">Carrières</a></li>
      </ul>
    </nav>
  </header>

  <main id="accueil" class="hero">
    <h2>Bienvenue chez Mathew's Technology</h2>
    <p>Nous repoussons les limites de la technologie pour offrir des solutions intelligentes et performantes.</p>
    <a href="#cours" class="btn">Découvrir nos cours</a>
  </main>

  <!-- Section Hero -->
  <header id="accueil" class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Formez-vous aux technologies de demain</h1>
            <p>Une école d'informatique innovante qui prépare ses étudiants aux défis technologiques du futur.</p>
            <div class="hero-btns">
                <ul class="nav-links">
                    <button><a href="#cours" class="success">Découvrir nos cours</a></button>
                    <button><a href="#contact" class="btn btn-outline">Nous contacter</a></button>
                </ul>
            </div>
        </div>
    </div>
  </header>
  <div class="hero-image">
      <img src="Etudiants.jpg" width="200" height="200"  alt="Étudiants en informatique">
  </div>

  <main>
    <h2>À propos de Matthew's Technology</h2>
    <p>Fondée en 2020, Matthew's Technology est une école d'informatique de pointe qui se consacre à la formation de la prochaine génération de professionnels du numérique.</p>
    <p>Notre approche pédagogique combine théorie 
        et pratique, avec des projets concrets 
        et un encadrement personnalisé.
    </p>
  </main>

  <!-- Section Cours -->
   <section id="cours" class="courses">
        <div class="container">
            <h2>Nos Programmes Éducatifs</h2>
            <h3><p class="section-subtitle"> Découvrez nos formations
                 adaptées aux besoins du marché</p></h3>
            
                 <div class="course-categories">
                <button class="category-btn" data-category="all">Tous</button>
                <button class="category-btn" data-category="debutant">Bureautique</button>
                <button class="category-btn" data-category="intermediaire">Technique</button>
                <button class="category-btn" data-category="avance">Graphique</button>
            </div>
  <div class="courses-grid">
                <!-- Cours 1 -->
                <div class="course-card" data-category="debutant">
                    <div class="course-img">
                        <img src="Developpement web.jpg" alt="Développement Web">
                        <span class="level">Technique</span>
                    </div>
                    <div class="course-info">
                        <h3>Développement Web Fondamental</h3>
                        <p>Apprenez les bases du HTML, CSS et JavaScript pour créer vos premiers sites web.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 3 mois</span>
                            <span><i class="fas fa-user-graduate"></i> En ligne/Présentiel</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Cours 2 -->
                <div class="course-card" data-category="intermediaire">
                    <div class="course-img">
                        <img src="Bureautique.png" alt="Bureautique">
                        <span class="level">Bureautique </span>
                    </div>
                    <div class="course-info">
                        <h3>Bureautique</h3>
                        <p>Maîtrisez Windows, Word,Power-Point,Excel,Access 
                            et Outlook.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 8 mois</span>
                            <span><i class="fas fa-user-graduate"></i> Présentiel</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Cours 3 -->
                <div class="course-card" data-category="avance">
                    <div class="course-img">
                        <img src="Intelligence Artificielle.jpg" alt="Intelligence Artificielle">
                        <span class="level">Technique</span>
                    </div>
                    <div class="course-info">
                        <h3>Intelligence Artificielle</h3>
                        <p>Plongez dans le machine learning et le deep learning avec des projets concrets.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 9 mois</span>
                            <span><i class="fas fa-user-graduate"></i> Présentiel</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Cours 4 -->
                <div class="course-card" data-category="intermediaire">
                    <div class="course-img">
                        <img src="Cyber sécurité.jpg" alt="Cybersécurité">
                        <span class="level">Technique</span>
                    </div>
                    <div class="course-info">
                        <h3>Cybersécurité</h3>
                        <p>Apprenez à protéger les systèmes contre les cyberattaques et vulnérabilités.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 6 mois</span>
                            <span><i class="fas fa-user-graduate"></i> Hybride</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>
                </div>
                
                <!-- Cours 5 -->
                <div class="course-card" data-category="debutant">
                    <div class="course-img">
                        <img src="Design graphique.png" alt="Design Graphique">
                        <span class="level">Graphique </span>
                    </div>
                    <div class="course-info">
                        <h3>Design Graphique & UI/UX</h3>
                        <p>Créez des interfaces utilisateur attrayantes et fonctionnelles.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 4 mois</span>
                            <span><i class="fas fa-user-graduate"></i> En ligne</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>


                </div>
                
                <!-- Cours 6 -->
                <div class="course-card" data-category="avance">
                    <div class="course-img">
                        <img src="Dépannage.jpg" alt="Dépannage">
                        <span class="level">Technique</span>
                    </div>
                    <div class="course-info">
                        <h3>Dépannage</h3>
                        <p>maîtrisez les bases du matériel 
                            (CPU, RAM, disques) et des logiciels 
                            (Windows, réseaux)
                             et adoptez une méthode rigoureuse
                              (isoler la panne, tester, remplacer).
                               Ayez une trousse à outils physique
                                (tournevis) et logicielle
                                 (LiveUSB, antivirus) pour intervenir
                                  efficacement sur les pannes courantes.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 8 mois</span>
                            <span><i class="fas fa-user-graduate"></i> Hybride</span>
                        </div>
                        <button onclick="enSavoirPlus()">En savoir plus</button>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button onclick="enSavoirPlus()">Voir Tous les Programmes</button>
            </div>
        </div>
    </section>

  <section id="reussites" class="success">
    <div class="container">
        <h2>Témoignage des Étudiants</h2>
        <p class="section-subtitle">Découvrez les parcours inspirants de nos anciens élèves</p>
        
        <div class="success-stories">
            
            <div class="story-card">
                <div class="story-img">
                    <img src="Jean Kyco.jpg" alt="Étudiant">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                </div>
                <div class="story-content">
                    <p>"Mathew's Technology m'a donné les compétences et la confiance nécessaires pour lancer ma startup."</p>
                    <h4>Jean Kyco ETIENNE</h4>
                    <span>Etudiant en Technique Informatique, Mathew's Technology</span>
                </div>
            </div>

            <div class="story-card">
                <div class="story-img">
                    <img src="Katia.jpg" alt="Étudiant">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                </div>
                <div class="story-content">
                    <p>"L'informatique révolutionne nos vies via automatisation, sécurité et innovations"</p>
                    <h4>Massé Katia</h4>
                    <span>Etudiante en Technique Informatique, Mathew's Technology</span>
                </div>
            </div>

            <div class="story-card">
                <div class="story-img">
                    <img src="Ricardo Laurent.jpg" alt="Étudiant">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                </div>
                <div class="story-content">
                    <p>"Les projets pratiques et le réseau professionnel de l'école ont été déterminants pour Notre parcours. Je recommande vivement Mathew's Technology!"</p>
                    <h4>Ricardo Laurent</h4>
                    <span>Etudiant en Technique Informatique, Mathew's Technology</span>
                </div>
            </div>

            <div class="story-card">
                <div class="story-img">
                    <img src="Ricardo Laurent.jpg" alt="Étudiant">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                </div>
                <div class="story-content">
                    <p>"Les projets pratiques et le réseau professionnel de l'école ont été déterminants pour Notre parcours. Je recommande vivement Mathew's Technology!"</p>
                    <h4>Ricardo Laurent</h4>
                    <span>Etudiant en Technique Informatique, Mathew's Technology</span>
                </div>
            </div>

        </div>
    </div>
</section>


  <!-- Section Contact -->
  <section id="contact" class="contact">
    <div class="container">
        <h2>Contactez-Nous</h2>
        <p class="section-subtitle">Des questions sur nos programmes? Envie de nous rejoindre? Écrivez-nous!</p>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Adresse</h4>
                        <p>Jacmel,FIC</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Téléphone</h4>
                        <p>+509 37183956</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>@matthewstech@gmail.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Heures d'ouverture</h4>
                        <p>Samedi: 8h-17h</p>
                        <p>Dimanche: 10h-15h</p>
                    </div>
                </div>
            </div>
            
            <form class="contact-form" action="contact.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="sujet" placeholder="Sujet">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Votre message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer le message</button>
            </form>

        </div>
    </div>
  </section>

  <footer class="footer">
    <p>&copy; 2025 Mathew's Technology - Tous droits réservés.</p>
  </footer>
</body>
</html>
