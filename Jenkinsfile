pipeline {
  agent any
  stages {
    
    
 
    stage('verify version') {
      steps {
        sh 'php --version'
         steps {
        withSonarQubeEnv(installationName: 'sonarqube', credentialsId: 'sonar') {
            
       }
      }
    }
    stage('cal') {
      steps {
        sh 'php index.php'
      }
    }
  }
}
