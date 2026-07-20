<?php
/**
 * Premium front page template.
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main landing-page">
	<section class="hero-section">
		<div class="hero-glow hero-glow-one"></div>
		<div class="hero-glow hero-glow-two"></div>

		<div class="hero-copy">
			<span class="hero-kicker">WORDPRESS · DEVOPS · COOLIFY</span>

			<h1>
				Une expérience web
				<span>déployée automatiquement avec Imrane le goat.</span>
			</h1>

			<p class="hero-lead">
				Cette démonstration WordPress illustre un pipeline moderne :
				le code est versionné sur GitHub, construit automatiquement
				puis déployé avec Coolify.
			</p>

			<div class="hero-actions">
				<a class="button button-primary" href="#pipeline">
					Voir le pipeline
				</a>

				<a class="button button-secondary" href="#services">
					Découvrir le projet
				</a>
			</div>

			<div class="hero-proof">
				<div>
					<strong>100 %</strong>
					<span>automatisé</span>
				</div>

				<div>
					<strong>Docker</strong>
					<span>conteneurisé</span>
				</div>

				<div>
					<strong>Coolify</strong>
					<span>déployé</span>
				</div>
			</div>
		</div>

		<div class="hero-visual" aria-label="Illustration du pipeline de déploiement">
			<div class="terminal-window">
				<div class="terminal-top">
					<span></span><span></span><span></span>
					<small>deployment.log</small>
				</div>

				<div class="terminal-body">
					<p><span class="terminal-muted">$</span> git push origin main</p>
					<p><span class="terminal-success">✓</span> Repository synchronized</p>
					<p><span class="terminal-success">✓</span> Docker image built</p>
					<p><span class="terminal-success">✓</span> Coolify deployment started</p>
					<p><span class="terminal-success">✓</span> WordPress is online</p>

					<div class="terminal-progress">
						<span></span>
					</div>

					<div class="deployment-status">
						<span class="status-dot"></span>
						Production healthy
					</div>
				</div>
			</div>

			<div class="floating-card floating-card-one">
				<span>GitHub</span>
				<strong>Push détecté</strong>
			</div>

			<div class="floating-card floating-card-two">
				<span>Coolify</span>
				<strong>Déploiement réussi</strong>
			</div>
		</div>
	</section>

	<section id="pipeline" class="pipeline-section section-shell">
		<div class="section-heading">
			<span class="section-kicker">PIPELINE</span>
			<h2>Du code à la production, sans action manuelle.</h2>
			<p>
				Chaque étape est structurée pour rendre le déploiement
				reproductible, rapide et facile à maintenir.
			</p>
		</div>

		<div class="pipeline-grid">
			<article class="pipeline-card">
				<span class="step-number">01</span>
				<div class="step-icon">&lt;/&gt;</div>
				<h3>Développement</h3>
				<p>
					Les modifications du thème sont versionnées et suivies
					dans le dépôt GitHub.
				</p>
			</article>

			<article class="pipeline-card">
				<span class="step-number">02</span>
				<div class="step-icon">GH</div>
				<h3>GitHub</h3>
				<p>
					Un push sur la branche principale déclenche la chaîne
					de déploiement.
				</p>
			</article>

			<article class="pipeline-card featured">
				<span class="step-number">03</span>
				<div class="step-icon">CO</div>
				<h3>Coolify</h3>
				<p>
					Coolify récupère le code, construit le service puis
					applique la nouvelle version.
				</p>
			</article>

			<article class="pipeline-card">
				<span class="step-number">04</span>
				<div class="step-icon">WP</div>
				<h3>WordPress</h3>
				<p>
					Le site devient disponible avec le nouveau thème,
					sans déploiement manuel.
				</p>
			</article>
		</div>
	</section>

	<section id="services" class="services-section section-shell">
		<div class="section-heading split-heading">
			<div>
				<span class="section-kicker">POURQUOI CE PROJET</span>
				<h2>Une démonstration simple, mais pensée comme un vrai produit.</h2>
			</div>

			<p>
				L’objectif est de montrer comment réunir développement web,
				conteneurisation et automatisation dans une expérience
				visuelle professionnelle.
			</p>
		</div>

		<div class="services-grid">
			<article class="service-card">
				<div class="service-icon">⚡</div>
				<h3>Déploiement rapide</h3>
				<p>
					Les nouvelles versions sont publiées sans manipulation
					manuelle sur le serveur.
				</p>
			</article>

			<article class="service-card">
				<div class="service-icon">◫</div>
				<h3>Environnement reproductible</h3>
				<p>
					Docker garantit un comportement cohérent entre
					développement et production.
				</p>
			</article>

			<article class="service-card">
				<div class="service-icon">◎</div>
				<h3>Supervision centralisée</h3>
				<p>
					Les builds, les redéploiements et l’état du service
					sont visibles depuis Coolify.
				</p>
			</article>
		</div>
	</section>

	<section class="architecture-section section-shell">
		<div class="architecture-panel">
			<div class="architecture-copy">
				<span class="section-kicker">ARCHITECTURE</span>
				<h2>Une chaîne moderne et lisible.</h2>
				<p>
					Le thème WordPress reste simple à modifier, tandis que
					l’infrastructure prend en charge la construction et le
					déploiement.
				</p>

				<ul class="check-list">
					<li>Code source centralisé sur GitHub</li>
					<li>Déploiement automatisé avec Coolify</li>
					<li>Application WordPress conteneurisée</li>
					<li>Design responsive desktop et mobile</li>
				</ul>
			</div>

			<div class="architecture-flow">
				<div class="architecture-node">
					<small>Source</small>
					<strong>GitHub</strong>
				</div>

				<span class="architecture-arrow">→</span>

				<div class="architecture-node active">
					<small>Platform</small>
					<strong>Coolify</strong>
				</div>

				<span class="architecture-arrow">→</span>

				<div class="architecture-node">
					<small>Runtime</small>
					<strong>WordPress</strong>
				</div>
			</div>
		</div>
	</section>

	<section class="cta-section section-shell">
		<div>
			<span class="section-kicker">DÉMONSTRATION TERMINÉE</span>
			<h2>Une base propre pour aller plus loin.</h2>
			<p>
				Ce thème peut ensuite évoluer vers un site vitrine, un blog,
				un portfolio ou une plateforme métier complète.
			</p>
		</div>

		<a class="button button-light" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			Actualiser la démonstration
		</a>
	</section>
</main>

<?php
get_footer();
