
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
                sh '''
                        scp -r ${WORKSPACE}${fil} rodolfo@${staging_server}:/var/www/localhost/htdocs${fil}
                '''
            }
        }
    }
}