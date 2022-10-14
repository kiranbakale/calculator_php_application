pipeline {

  agent any

     environment {
        imageName = "php-cal-app"
        registryCredentials = "nexus"
        registry = "http://52.90.184.36:8081/"
        dockerImage = 'php-dock-image'
     }



  stages {

      stage('Code checkout')
        {
            steps {
                 git branch: 'main', url: 'https://github.com/kiranbakale/calculator_php_application.git'
                }
        }

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
    stage('Building image')
    {
      steps
      {
        script
        {
          dockerImage = docker.build imageName
        }
      }
    }

  }

}
