require 'mail'
#SMTP Settings
Mail.defaults do
  delivery_method :smtp, {
    :address => "smtp.gmail.com",
    :port => 587,
    :user_name => "vatniavdhut14@gmail.com",
    :password => "jrrf wbqx ljuz jrbk",
    :authentication => :login,
    :enable_starttls_auto => true
  }
end

#Define email message
message = Mail.new do
  from 'vatniavdhut14@gmail.com'
  to 'akshay.yadav22@pccoepune.org'
  subject 'Mail using RUBY!'
  body 'SDL aani OS che code kar!'
end

message.deliver!