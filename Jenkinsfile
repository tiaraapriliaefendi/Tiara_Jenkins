pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/NAMA-USERNAME/php-ci-test.git'
            }
        }

        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }

        stage('Run PHPUnit') {
            steps {
                powershell 'vendor/bin/phpunit'
            }
        }
    }
}
