pipeline {

  agent any

  stages {

     

    stage('verify version') {

      steps {

        withSonarQubeEnv(installationName: 'Sonarqube', credentialsId: 'Sonar-jenkins') {

           

       }

        sh 'php --version'

      }

    }

    stage('cal') {

      steps {

        sh 'php index.php'

      }

    }

  }

}
