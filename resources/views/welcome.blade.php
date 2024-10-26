<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytique Pan - Test Professionnel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <style>
        /* Custom styling for a more professional look */
        .nav-bar { padding: 1rem; background: #333; color: white; }
        .nav-bar a { color: white; margin-right: 1rem; }
        .container { max-width: 1200px; }
        .tabs { display: flex; gap: 0.5rem; margin-bottom: 1.5rem; }
        .tabs button { flex: 1; }
        .section-title { margin-top: 2rem; color: #333; }
        .card { padding: 1.5rem; border: 1px solid #ddd; border-radius: 0.5rem; }
        .hover-info { font-size: 0.9rem; background: #f0f0f0; padding: 1rem; border-radius: 0.25rem; }
        footer { margin-top: 2rem; padding: 1rem 0; background: #f8f9fa; text-align: center; }
    </style>
</head>
<body>

    <!-- Barre de navigation -->
    <header class="nav-bar">
        <div class="container">
            <nav>
                <a href="#">Accueil</a>
                <a href="#tabs">Onglets</a>
                <a href="#buttons">Boutons d'inscription</a>
                <a href="#hover">Sections d'aide</a>
            </nav>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="container">
        <!-- En-tête de la page -->
        <section>
            <h1>Analytique Pan - Cas d'utilisation</h1>
            <p>Ce site utilise des interactions de suivi pour évaluer les comportements utilisateurs à travers des onglets, boutons et sections d'aide.</p>
        </section>

        <!-- Cas d'utilisation : Suivi des onglets (impressions) -->
        <section id="tabs">
            <h2 class="section-title">Suivi des vues d'onglets</h2>
            <div class="tabs">
                <button data-pan="onglet-1" class="tab-button">Présentation</button>
                <button data-pan="onglet-2" class="tab-button">Caractéristiques</button>
                <button data-pan="onglet-3" class="tab-button">Avis</button>
            </div>
            <div>
                <p>Les onglets ci-dessus enregistreront les impressions pour savoir lequel est le plus consulté.</p>
            </div>
        </section>

        <!-- Cas d'utilisation : Suivi des boutons d'inscription (clics) -->
        <section id="buttons">
            <h2 class="section-title">Suivi des clics sur les boutons d'inscription</h2>
            <div class="grid">
                <article class="card">
                    <h3>Essai Gratuit</h3>
                    <p>Inscrivez-vous pour un essai gratuit de 30 jours.</p>
                    <button data-pan="inscription-bouton-essai" class="secondary">Inscription</button>
                </article>
                <article class="card">
                    <h3>Formule Mensuelle</h3>
                    <p>Inscription pour la formule mensuelle sans engagement.</p>
                    <button data-pan="inscription-bouton-mensuel" class="secondary">Inscription</button>
                </article>
                <article class="card">
                    <h3>Formule Annuel</h3>
                    <p>Optez pour une inscription annuelle et économisez.</p>
                    <button data-pan="inscription-bouton-annuel" class="secondary">Inscription</button>
                </article>
            </div>
        </section>

        <!-- Cas d'utilisation : Suivi des survols pour les sections d'aide -->
        <section id="hover">
            <h2 class="section-title">Suivi des survols pour l'aide</h2>
            <div class="hover-info" data-pan="aide-inscription">Besoin d'aide avec l'inscription ? Survolez cette section.</div>
            <div class="hover-info" data-pan="aide-paiement">Besoin d'aide avec le paiement ? Survolez cette section.</div>
            <div class="hover-info" data-pan="aide-compte">Besoin d'aide avec votre compte ? Survolez cette section.</div>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2024 - Analyse et Suivi Pan</p>
    </footer>

    <!-- Script Pan -->
    <script src="{{ asset('pan-tracker.js') }}"></script>
</body>
</html>
