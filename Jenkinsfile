pipeline {
  agent any
  stages {
      
      
      stage('verify version') {
      steps {
        sh 'php --version'
      }
        withSonarQubeEnv(installationName: 'Sonarqube', credentialsId: 'Sonar-jenkins') {
            
       }
      
    }
    stage('cal') {
      steps {
        sh 'php index.php'
      }
    }
  }
}
