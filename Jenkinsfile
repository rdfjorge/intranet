
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        
        stage('Transferencia de Arquivos'){
            steps{
 //              sh 'scp -r /var/lib/jenkins/jobs/Intranet/workspace/* root@${staging_server}:/var/www/localhost/htdocs'
                sh '''
                    for fileName in `find ${WORKSPACE} -type f -mmin -10 | grep -v ".git" | grep -v "Jenkinsfile"`
                    do
                        fil=$(echo ${fileName} | sed 's/'"${JOB_NAME}"/workspace'/')
                        echo 'Separar'
                        echo ${fil}
                        scp -r ${WORKSPACE}${fil} root@${staging_server}:/var/www/localhost/htdocs${fil}
                    done
                '''
 
            }
        }  
    }
}