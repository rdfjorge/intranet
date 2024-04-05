
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        
        stage('Transferencia de Arquivos'){
            steps{
               sh 'scp -r /var/lib/jenkins/jobs/Intranet/workspace/* root@${staging_server}:/var/www/localhost/htdocs'
            }
        }  
    }
}