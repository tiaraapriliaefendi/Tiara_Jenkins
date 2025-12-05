pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                // Mengambil kode dari GitHub repository kamu
                git branch: 'master', url: 'https://github.com/tiaraapriliaefendi/Tiara_Jenkins.git'
            }
        }

        stage('Run PHP Script') {
            steps {
                // Menjalankan script PHP utama
                powershell 'php "index (1).php"'
            }
        }

        stage('Run Unit Tests') {
            steps {
                // Menjalankan unit test menggunakan PHPUnit PHAR tanpa memuat php.ini (menghilangkan warning curl)
                powershell 'php -n phpunit.phar CalculatorTest.php'
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
