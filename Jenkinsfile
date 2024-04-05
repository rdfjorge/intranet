
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
                sh '''
                    for fileName in `find ${htdocs} -type f -mmin -10 | grep -v ".git" | grep -v "Jenkinsfile"`
                    do
                        fil=$(echo ${fileName} | sed 's/'"${JOB_NAME}"'/ /' | awk {'print $2'})
                        scp -r ${fil} root@${staging_server}:/var/www/localhost/htdocs/${fil}
                    done
                '''
            }
        }
    }
}