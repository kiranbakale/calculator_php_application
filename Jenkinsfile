pipeline {

  agent any

     environment {
        imageName = "php-cal-app"
        registryCredentials = "nexus"
        registry = "52.90.184.36:8084"
        dockerImage = ''
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

    
stage('Uploading to Nexus') {
     steps{  
         script {
             docker.withRegistry( 'http://'+registry, registryCredentials ) {
             dockerImage.push('latest')
          }
        }
      }
    }
    
    stage('stop previous containers') {
         steps {
            sh 'docker ps -f name=php-cal-app -q | xargs --no-run-if-empty docker container stop'
            sh 'docker container ls -a -fname=php-cal-app -q | xargs -r docker container rm'
         }
       }
      
    stage('Docker Run') {
       steps{
         script {
            dockerImage.run("-p 80:80 --rm --name php-cal-app")
               
            }
         }
      }    
    }
  }

}
