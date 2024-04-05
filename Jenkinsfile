
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
               // sh 'scp -r /var/lib/jenkins/jobs/Intranet/workspace root@10.10.10.242:/var/www/localhost/htdocs'
               sh '''
                    $(echo ${fileName}
                    for fileName in `find ${WORKSPACE} -type f -mmin -10 | grep -v ".git" | grep -v "Jenkinsfile"`
                    do
                        fil=$(echo ${fileName})
                        scp -r ${WORKSPACE}${fil} root@${staging_server}:var/www/localhost/htdocs${fil}
                    done
                '''
            }
        }
    }
}