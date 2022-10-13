pipeline {
  agent any
  stages {
    
    
 
    stage('verify version') {
      steps {
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
