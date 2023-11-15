pipeline {
    agent {
        docker {
            image 'composer:latest'
        }
    }
    stages {
        stage('Build') {
            steps {
                dir('src') { // Setting working directory to 'src'
                    sh 'composer install'
                }
            }
        }
        stage('UnitTest') {
            steps {
                dir('src') { // Setting working directory to 'src'
                    sh './vendor/bin/phpunit --log-junit ../logs/unitreport.xml -c test/phpunit.xml test'
                }
            }
        }
    }
    post {
        always {
            junit testResults: 'logs/unitreport.xml'
        }
    }
}
