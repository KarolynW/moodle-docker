# Kara's Local Moodle Development Environment

This repository contains a self-contained Moodle development environment powered by Docker, used for hands-on testing, plugin development, and theming experiments. It was created as part of a technical re-skilling and preparation project for the University of Cambridge Technical Developer (VC45553) role.

## 🔧 Project Goals

- Set up Moodle locally using Docker Compose
- Develop and test Moodle plugins and themes
- Run PHPUnit and Behat tests inside Docker
- Connect development workflow to GitHub with CI integration
- Demonstrate familiarity with Moodle’s developer ecosystem and deployment tooling

## 📦 What's Inside

```
moodle-docker/
├── docker-compose.yml        # Docker config for Moodle + MariaDB
├── README.md                 # You're here
├── themes/                   # Custom Moodle themes (e.g., Moove)
│   └── moove/
├── local/                    # Moodle local plugins under development
│   └── yourplugin/
├── .github/
│   └── workflows/
│       └── moodle-test.yml   # GitHub Actions CI setup for PHPUnit
└── .vscode/                  # Optional: Dev container or workspace config
```

## 🚀 Quick Start

Make sure [Docker Desktop](https://www.docker.com/products/docker-desktop/) is installed and running.

```bash
git clone https://github.com/yourusername/moodle-docker.git
cd moodle-docker
docker compose up -d
```

Access Moodle at: [http://localhost:8080](http://localhost:8080)

Default credentials (for demo/dev purposes):
- **Username**: `kara`
- **Password**: `karatest123`

## ⚙️ Running PHPUnit Tests

```bash
docker exec -it kara-moodle /bin/bash
cd /bitnami/moodle
vendor/bin/phpunit
```

## 🧪 Running Behat Tests

```bash
docker exec -it kara-moodle /bin/bash
php admin/tool/behat/cli/init.php
vendor/bin/behat
```

## 🌐 GitHub CI Integration

The repo includes a GitHub Actions workflow (`.github/workflows/moodle-test.yml`) to automate:

- Composer dependency installation
- PHPUnit test execution
- MySQL service bootstrapping

## 📚 What This Demonstrates

This project showcases:
- Moodle system familiarity
- Docker-based local dev environments
- Plugin and theme development workflows
- Automated testing setup (PHPUnit, Behat)
- Version control via Git and GitHub
- CI pipeline readiness for scalable development

---

**Maintainer**: [Kara Webb](mailto:kara@example.com)

Licensed under MIT.
