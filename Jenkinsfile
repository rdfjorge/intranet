
pipeline{
    agent any
    environment{
        staging_server="10.10.10.242"
    }
    stages{
        stage('Deploy to Remote'){
            steps{
                sh 'scp -r /var/lib/jenkins/jobs/Intranet/workspace rodolfo@10.10.10.242:/var/www/localhost/htdocs  '
            }
        }
    }
}