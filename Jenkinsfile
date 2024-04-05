
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
                sh '''
                    `find ${WORKSPACE} -type f -mmin -10 | grep -v ".git" | grep -v "Jenkinsfile"`
                    
                        fil=$(echo ${fileName} | sed 's/'"${JOB_NAME}"'/ /' | awk {'print $2'})
                        scp -r ${WORKSPACE}${fil} root@${staging_server}:/var/www/localhost/htdocs${fil}
                    
                '''
            }
        }
    }
}