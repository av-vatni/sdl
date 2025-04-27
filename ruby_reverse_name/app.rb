require 'sinatra'
def rev_name(fname, lname)
  "#{lname} #{fname}"
end

get '/' do
  erb:index
end

post '/reverse' do
  fname = params[:fname]
  lname = params[:lname]
  @reversed_name = rev_name(fname, lname)
  erb:reverse
end