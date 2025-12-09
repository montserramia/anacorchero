# Ana Corchero - Plataforma Web

Plataforma web per a Ana Corchero construïda amb Drupal 11.

## 📋 Requisits

- PHP 8.3+
- Composer
- MySQL/MariaDB
- DDEV (per a desenvolupament local)

## 🚀 Instal·lació Local amb DDEV

### 1. Clonar el repositori

```bash
git clone https://github.com/montserramia/anacorchero.git
cd anacorchero
```

### 2. Iniciar DDEV

```bash
ddev start
```

### 3. Instal·lar dependències

```bash
ddev composer install
```

### 4. Importar la base de dades

Demana l'arxiu de backup de la base de dades i importa'l:

```bash
ddev import-db --file=backup.sql.gz
```

### 5. Accedir al lloc

```bash
ddev launch
```

El lloc estarà disponible a: `https://anacorchero.ddev.site`

## 🌐 Desplegar al servidor de producció

### 1. Connectar al servidor per SSH

```bash
ssh usuari@domini.com
cd /path/to/web/root
```

### 2. Primera vegada: Clonar el repositori

```bash
git clone https://github.com/montserramia/anacorchero.git .
```

### 3. Actualitzacions posteriors

```bash
git pull origin master
```

### 4. Instal·lar/actualitzar dependències

```bash
composer install --no-dev --optimize-autoloader
```

### 5. Configurar settings.php

Crear o editar `web/sites/default/settings.php` amb la configuració del servidor:

```php
$databases['default']['default'] = array (
  'database' => 'nom_base_dades',
  'username' => 'usuari_bd',
  'password' => 'contrasenya_bd',
  'host' => 'localhost',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
);

$settings['trusted_host_patterns'] = [
  '^anacorchero\.com$',
  '^www\.anacorchero\.com$',
];
```

### 6. Importar la base de dades (primera vegada)

```bash
# Exportar des de local
ddev export-db --file=anacorchero-backup.sql.gz

# Importar al servidor
gunzip anacorchero-backup.sql.gz
mysql -u usuari -p nom_base_dades < anacorchero-backup.sql
```

### 7. Sincronitzar arxius pujats

Els arxius de `web/sites/default/files/` no estan al repositori. Sincronitza'ls:

```bash
# Des de local
rsync -avz web/sites/default/files/ usuari@servidor:/path/to/web/sites/default/files/
```

### 8. Configurar permisos

```bash
chmod 755 web/sites/default
chmod 644 web/sites/default/settings.php
chmod 755 web/sites/default/files
chown -R www-data:www-data web/sites/default/files
```

### 9. Netejar memòria cau

```bash
drush cr
```

## 👥 Col·laboració i Flux de Treball

### Per a col·laboradors

1. **Clonar el repositori i configurar l'entorn local** (veure Instal·lació Local)

2. **Crear una branca per a noves funcionalitats:**

```bash
git checkout -b feature/nom-funcionalitat
```

3. **Fer canvis i commits:**

```bash
git add .
git commit -m "Descripció clara dels canvis"
```

4. **Pujar la branca a GitHub:**

```bash
git push origin feature/nom-funcionalitat
```

5. **Crear un Pull Request** a GitHub per a revisió

### Per a l'administrador/a

1. **Revisar el Pull Request** a GitHub
2. **Fer Merge** si els canvis són correctes
3. **Actualitzar el servidor de producció:**

```bash
ssh usuari@servidor
cd /path/to/web
git pull origin master
composer install --no-dev
drush cr
```

## 📁 Estructura del Projecte

```
anacorchero/
├── .ddev/              # Configuració DDEV (no al repositori)
├── .gitignore          # Arxius ignorats per Git
├── composer.json       # Dependències PHP
├── config/             # Configuració de Drupal
├── logo/               # Recursos del logotip
├── tambor/             # Recursos del tambor
├── vendor/             # Dependències de Composer (no al repositori)
├── web/                # Arrel del lloc Drupal
│   ├── core/           # Nucli de Drupal
│   ├── modules/        # Mòduls
│   ├── themes/         # Temes
│   └── sites/
│       └── default/
│           ├── files/  # Arxius pujats (no al repositori)
│           └── settings.php  # Configuració (no al repositori)
└── README.md           # Aquest arxiu
```

## 🔒 Arxius NO inclosos al repositori

Els següents arxius/directoris estan al `.gitignore` i NO es versionen:

- `web/sites/*/settings*.php` - Configuració amb credencials
- `web/sites/*/files/` - Arxius pujats pels usuaris
- `.ddev/` - Configuració local de DDEV
- `vendor/` - Dependències de Composer
- `*.sql`, `*.sql.gz` - Backups de base de dades

Aquests arxius s'han de gestionar separadament per cada entorn.

## 🛠️ Comandes útils

### DDEV (Local)

```bash
ddev start              # Iniciar l'entorn
ddev stop               # Aturar l'entorn
ddev restart            # Reiniciar l'entorn
ddev ssh                # Accedir al contenidor
ddev composer install   # Instal·lar dependències
ddev drush cr           # Netejar memòria cau
ddev export-db          # Exportar base de dades
ddev import-db          # Importar base de dades
ddev launch             # Obrir el lloc al navegador
```

### Drush

```bash
drush cr                # Netejar memòria cau
drush updb              # Executar actualitzacions de BD
drush cex               # Exportar configuració
drush cim               # Importar configuració
drush uli               # Generar enllaç de login
```

## 🆘 Solució de problemes

### Error de permisos

```bash
chmod -R 755 web/sites/default/files
chown -R www-data:www-data web/sites/default/files
```

### Memòria cau no es neteja

```bash
ddev drush cr
# o al servidor:
drush cr
```

### Composer out of memory

```bash
ddev composer install --no-dev --optimize-autoloader
```

## 📞 Suport

Per a qualsevol problema o pregunta, contacta amb l'administrador/a del projecte.

## 📝 Llicència

Propietari - Tots els drets reservats
