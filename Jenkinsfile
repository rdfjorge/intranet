
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
                sh '''
                    for fileName in `find ${WORKSPACE} -type f -mmin -10 | grep -v ".git" | grep -v "Jenkinsfile"`
                    do
                        fil=$(echo ${fileName} | sed 'Job:'"${JOB_NAME}"'')
                        scp -r ${WORKSPACE}${fil} root@${staging_server}:/var/www/localhost/htdocs${fil}
                    done
                '''
            }
        }
    }
}