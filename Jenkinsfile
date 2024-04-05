
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        
        stage('Transferencia de Arquivos'){
            steps{
               sh 'scp -r /var/lib/jenkins/jobs/Intranet/workspace root@${staging_server}:/var/www/localhost/htdocs'
            }
        }
        stage('Renomear Diretorio'){
            steps{
               echo "Rename"
               
               sh 'mv root@10.10.10.242:/var/www/localhost/htdocs/workspace root@10.10.10.242:/var/www/localhost/htdocs/Intranet'

            }
        }
    }
}