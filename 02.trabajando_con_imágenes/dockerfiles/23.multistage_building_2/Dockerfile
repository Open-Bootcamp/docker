# FROM centos
FROM centos as test
# RUN fallocate -l 10M /opt/file1
# RUN fallocate -l 20M /opt/file2
# RUN fallocate -l 30M /opt/file3
RUN fallocate -l 20M /opt/result
FROM alpine
COPY --from=test /opt/result /opt/myfile