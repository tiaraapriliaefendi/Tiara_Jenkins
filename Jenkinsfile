pipeline {
    agent any

    stages {
        stage('Prepare Repository') {
            steps {
                echo 'Using local repository...'
            }
        }

        stage('Run PHP Script') {
            steps {
                echo 'Running PHP script...'
                powershell 'php index.php'
            }
        }

        stage('Run PHPUnit Tests') {
            steps {
                echo 'Running PHPUnit tests...'
                powershell 'php phpunit.phar tests/CalculatorTest.php'
            }
        }
    }

    post {
        always {
            echo 'Pipeline selesai dijalankan.'
        }
        success {
            echo 'Build dan test berhasil!'
        }
        failure {
            echo 'Terjadi kesalahan pada build atau test.'
        }
    }
}
