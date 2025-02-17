pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/generak13/simple-php.git', branch: 'master'
            }
        }

        stage('Build') {
            steps {
                // Install dependencies
                sh 'composer install'
            }
        }

        stage('Test') {
            steps {
                // Run tests
                vendor/bin/phpunit tests
            }
        }

        stage('Deploy') {
            steps {
                // Deployment logic goes here (e.g., pushing to a cloud provider)
                echo 'Deploying application...'
            }
        }
    }

    post {
        always {
            echo 'Pipeline completed.'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}
